<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class UserForm extends Form
{
    #[Rule('required|email')]
    public $email = "";

    #[Rule('required|string|min:3|max:255')]
    public $name = "";

    #[Rule('nullable|cpf')]
    public $cpf = "";
}
