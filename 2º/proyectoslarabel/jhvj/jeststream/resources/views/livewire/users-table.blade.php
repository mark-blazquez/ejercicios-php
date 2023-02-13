<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Livewire\Component;


class UsersTable extends Component{
    public function render(){
    return view('livewire.users-table',['users' => User::paginate()]);
	}
}

?>
<div>
    @foreach($users as $user)
        <p>{{$user->name}}</p>
    @endforeach
</div>

