<?php 
namespace App\Http\Exports;

	use Illuminate\Contracts\View\View;
	use Maatwebsite\Excel\Concerns\FromView;

	use App\Article;

	class ArticleExport implements FromView {
		public function view(): View{
			return view('articles.excel', [
				'arts' => Article::all()
		 	]);
		}
	}
?>