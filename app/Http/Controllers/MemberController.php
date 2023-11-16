<?php

namespace App\Http\Controllers;

use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return response()->json($members);
    }

    public function store()
    {
        $members = Member::create(request()->all());
        return response()->json($members);
    }

    public function show(Member $member)
    {
        return response()->json($member);
    }

    public function update(Member $member)
    {
        $member->update(request()->all());
        return response()->json($member);
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return response()->json(["message" => "Successfully deleted data"], 204);
    }
}
