<?php

namespace App\Http\Livewire\blog;

use App\Models\Blog;
use Livewire\Component;

class Indexblog extends Component
{
    public function render()
    {
        $blogs = Blog::paginate(5);
        return view('blog.indexblog', [
            'blogs' => $blogs
        ]);
    }
    public function actionp($action, $val, Blog $id)
    {

        if ($action == 'publish') {
            $id->update([
                'publish' => $val
            ]);
        } else {
            $id->delete();
        }
    }
}
