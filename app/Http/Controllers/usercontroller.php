<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\UserUpdate;
    use Illuminate\Http\Request;
    use App\User;
    use App\userDetail;

    class usercontroller extends Controller {
        //
        public function user_update($id) {
            // dd($id);

            $user = User::with('userDetail')->where('id', $id)->first();  // return only one object first
            //dd($user);

            return view("user_update")->with(["user" => $user]);
        }

        public function user_update_post(UserUpdate $request, $id) {
            $inputs = $request->input();

            $age = $inputs["age"];
            $address = $inputs["address"];
            // "select * from users WHERE id="1""
            $user = User::where('id', $id)->first();
            $user->first_name = $inputs['first_name'];
            $user->last_name = $inputs['last_name'];
            $user->save();

            // $userDetail=userDetail::where('user_id',$id);

            $userDetail = userDetail::firstOrcreate(
                [
                    'user_id' => $id],
                [

                    'age' => $age,


                    'address' => $address

                ]);


            //  dd($inputs);
        }
    }
