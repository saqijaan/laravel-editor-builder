<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaraEditor\App\Contracts\Editable;
use LaraEditor\App\Traits\EditableTrait;

class Page extends Model implements Editable
{
    use HasFactory,
        EditableTrait;

    public function getEditorLoadUrl(): ?string
    {
        return route('pages.edit');
    }

    public function getEditorStoreUrl(): ?string
    {
        return route('pages.store',$this);
    }

    public function getEditorTemplatesUrl(): ?string
    {
        return route('pages.templates');
    }
}
