<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->when(request('query'), function ($query, $searchQuery) {
                $query->where('name', 'like', "%{$searchQuery}%");
            })
            ->latest()
            ->paginate(setting('pagination_limit'));

        return $users;
    }


        // return $users;

        // $users = User::latest()->paginate(5);

    //   $users = User::latest()->get()->map(function ($user) {
        
    //     // dd($user->created_at->ToFormattedDate());
    //     return [
    //         'id' => $user->id,
    //         'name' => $user->name,
    //         'email' => $user->email,
    //         // 'created_at' => $user->created_at->format(config('app.date_format')),
    //         'created_at' => $user->created_at->ToFormattedDate(),
    //     ];
    //   });


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8'
        ]);

        return User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Request $request, string $id,
     */
    public function update(User $user)
    {
        //

        request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' .$user->id,
            'password' => 'sometimes|min:8'

        ]);

        $user->Update([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password') ? bcrypt(request('password')) : $user->password,
        ]);
        
        return $user;

    }

    /**
     * Remove the specified resource from storage.
     * string $id,
     */
    public function destroy(User $user)
    {
        //

        $user->delete();

        return response()->noContent();
    }


    public function changeRole(User $user ) 
    {
        // dd(request('role'));
        $user->update([
            'role' => request('role'),
        ]);

        return response()->json(['success' => true ]);
    }



    public function bulkDelete(){

        User::whereIn('id', request('ids'))->delete();

        return response()->json(['message' => 'Users deleted Successfuly']);
    }
}
