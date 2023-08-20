<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\Child;
use App\Models\HelpPortege;
use App\Models\PortageAnswer;
use App\Models\PortageQuestion;
use App\Models\TestResult;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function index(Request $request)
    {

        $date=Child::where('id', $request->child_id)->first();
        $age_update=ChildController::age($date->date);
        $date->update(
            [
                'age' => $age_update,
            ]);
        
        $age = Child::where('id', $request->child_id)->first();
        $box1 = Box::where('dim_id', $request->dim_id)->where('start_age', '<=', $age->age)->where('end_age', '>=', $age->age)->first();
        if ($request->disability == 'true') {
            $box = Box::where('id', $box1->id - 3)->first();
        } else {
            $box = Box::where('id', $box1->id - 2)->first();
        }

        $q = PortageQuestion::where('box_id', $box->id)->get();

        $ans = HelpPortege::create([
            'start' => $box->id,
            'true' => '0',
            'false' => '0',
            'true_box_id' => 1,
            'false_box_id' => 1,
            'base' => 0,
            'child_id' => $request->child_id,
            'mark' => 0,
        ]);

        return response()->json([
            'result' => 'not end',
            'question' => $q,
            'start_age'=>$box->start_age,
            'end_age'=>$box->end_age,
        ]);
    }

    public function store_index(Request $request)
    {
        $counter = 0;
        $count_true = 0;
        $count_false = 0;
        $Q_id = 0;

        foreach ($request->ans as $item) {
            $qq=PortageQuestion::where('id',$item['ques_id'])->value('ques_number');
            // رقم السؤال 1
            if ($qq == 1) {
                $Q_id = 1;
            }
            $ans = PortageAnswer::create([
                'ques_id' => $item['ques_id'],
                'child_id' => $request->child_id,
                'ques_mark' => $item['ques_mark'],
                'box_id' => $request->box_id,
            ]);
            ++$counter;
            if ($item['ques_mark'] == 'true') {
                ++$count_true;
            } else {
                ++$count_false;
            }
        }

        $res = HelpPortege::where('child_id', $request->child_id)->first();


        // العمر القاعدي سنة
        if ($Q_id == 1 && $res->true == 0) {
            $res->update(
                [
                    'base' => 1,
                ]);

                // لم يجب صندوقين خاطئين
            if ($res->false != 2) {
                $box = Box::where('id', $res->start + 1)->first();
                $q = PortageQuestion::where('box_id', $box->id)->get();

                return response()->json([
                    'result' => 'not end',
                    'question' => $q,
                    'start_age'=>$box->start_age,
                    'end_age'=>$box->end_age,
                ]);
            }
            // اجاب على صندوقين غلط
            else {
                $agee = $this->result($request->child_id);
                $res->delete();
                $r = PortageAnswer::where('child_id', $request->child_id)->get();
                foreach ($r as $w) {
                    $w->delete();
                }

                return response()->json([
                    'result' => 'end',
                    'age' => $agee,
                ]);
            }
        }

        // عمره القاعدي ليس 1 و لم يجب على صندوقين صح
        if ($res->true != 2 && $res->base !=1) {
            //عدد الاجابات الصحيحية بعدد الأسئلة
            if ($counter == $count_true) {
                //اجاب على الصندوق السابق بشكل صحيح
                if ($res->true_box_id == ($request->box_id + 1) || $res->true_box_id == 1) {
                    $t = $res->true + 1;
                    $res->update(
                        [
                            'true' => $t,
                            'true_box_id' => $request->box_id,
                        ]
                    );
                } else {
                    $t = 1;
                    $res->update(
                        [
                            'true' => $t,
                            'true_box_id' => $request->box_id,
                        ]
                    );
                }
                // جاوب صندوقين صح
                if ($t == 2) {
                    if ($res->false != 2) {
                        $box = Box::where('id', $res->start + 1)->first();
                        $q = PortageQuestion::where('box_id', $box->id)->get();

                        return response()->json([
                            'result' => 'not end',
                            'question' => $q,
                            'start_age'=>$box->start_age,
                            'end_age'=>$box->end_age,
                        ]);
                    } else {
                        $agee = $this->result($request->child_id);
                        $res->delete();
                        $r = PortageAnswer::where('child_id', $request->child_id)->get();
                        foreach ($r as $w) {
                            $w->delete();
                        }

                        return response()->json([
                            'result' => 'end',
                            'age' => $agee,
                        ]);
                    }
                }// ما جاوب صندوقين صح بس واحد غالبا بس  احد الاسئلة هو السؤال الأول

                elseif ($t != 2 && $Q_id == 1) {
                    $res->update(
                        [
                            'base' => 1,
                        ]);
                }
                //
                else {
                    $box = Box::where('id', $request->box_id - 1)->first();
                    $q = PortageQuestion::where('box_id', $box->id)->get();

                    return response()->json([
                        'result' => 'not end',
                        'question' => $q,
                        'start_age'=>$box->start_age,
                        'end_age'=>$box->end_age,
                    ]);
                }
            }
            if ($count_false == $counter) {
                if ($res->false == 1 && $res->false_box_id == $request->box_id + 1) {
                    $res->update(
                        [
                            'false' => 2,
                            'false_box_id' => $request->box_id,
                        ]);
                } else {
                    $res->update(
                        [
                            'false' => 1,
                            'false_box_id' => $request->box_id,
                        ]);
                }
            }
            $box = Box::where('id', $request->box_id - 1)->first();
            $q = PortageQuestion::where('box_id', $box->id)->get();

            return response()->json([
                'result' => 'not end',
                'question' => $q,
                'start_age'=>$box->start_age,
                'end_age'=>$box->end_age,
            ]);
        }

        if ($count_false == $counter) {
            if ($res->false == 1 && $res->false_box_id == $request->box_id - 1) {
                $agee = $this->result($request->child_id);
                $res->delete();
                $r = PortageAnswer::where('child_id', $request->child_id)->get();
                foreach ($r as $w) {
                    $w->delete();
                }

                return response()->json([
                    'result' => 'end',
                    'age' => $agee,
                ]);
            } else {
                $res->update(
                    [
                        'false' => 1,
                        'false_box_id' => $request->box_id,
                    ]);
            }
        }

        $box = Box::where('id', $request->box_id + 1)->first();
        $q = PortageQuestion::where('box_id', $box->id)->get();

        return response()->json([
            'result' => 'not end',
            'question' => $q,
            'start_age'=>$box->start_age,
            'end_age'=>$box->end_age,
        ]);
    }

    public function result(int $child_id_)
    {
        $res = HelpPortege::where('child_id', $child_id_)->first();

        $rule = ($res->base ==1) ? 0 : Box::where('id', $res->true_box_id +1 )->value('mark_age');


        $q=PortageAnswer::where('box_id',$res->true_box_id)->get();

        foreach ($q as $t) {
            $t->delete();
        }

        $q=PortageAnswer::where('box_id',$res->true_box_id+1)->get();

        foreach ($q as $t) {
            $t->delete();
        }


        $true = PortageAnswer::where('child_id', $child_id_)->where('ques_mark', 'true')->get();

        $additional =0;

        foreach ($true as $t) {
            $additional = $additional + PortageQuestion::where('id', $t->ques_id)->value('ques_mark');
        }

        $dim=Box::where('id',$res->start)->value('dim_id');


        $ans = TestResult::create([
            'child_id' => $child_id_,
            'basal' => $rule,
            'additional' => $additional,
            'dim_id' => $dim,
            'age'=>Child::where('id', $child_id_)->value('age')
        ]);

        return $ans;

    }
}
