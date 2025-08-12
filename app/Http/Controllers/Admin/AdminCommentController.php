<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleComment;
use Illuminate\Http\Request;

class AdminCommentController extends Controller
{
    /**
     * Remove the specified comment from storage.
     */
    public function destroy(ArticleComment $comment)
    {
        $articleId = $comment->article_id;
        $comment->delete();

        return redirect()
            ->route('admin.articles.show', $articleId)
            ->with('success', 'Komentar berhasil dihapus!');
    }

    /**
     * Display all comments with management options.
     */
    public function index(Request $request)
    {
        $query = ArticleComment::with(['user', 'article'])
            ->withTrashed()
            ->orderBy('created_at', 'desc');

        // Search functionality
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('content', 'like', "%{$search}%")
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery->where('name', 'like', "%{$search}%");
                    })
                    ->orWhereHas('article', function ($articleQuery) use ($search) {
                        $articleQuery->where('title', 'like', "%{$search}%");
                    });
            });
        }

        $comments = $query->paginate(20);

        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Restore the specified soft deleted comment.
     */
    public function restore($id)
    {
        $comment = ArticleComment::withTrashed()->findOrFail($id);
        $comment->restore();

        return back()->with('success', 'Komentar berhasil dipulihkan!');
    }

    /**
     * Permanently delete the specified comment.
     */
    public function forceDelete($id)
    {
        $comment = ArticleComment::withTrashed()->findOrFail($id);
        $comment->forceDelete();

        return back()->with('success', 'Komentar berhasil dihapus permanen!');
    }
}
