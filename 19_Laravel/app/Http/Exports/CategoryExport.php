<?php 
namespace App\Http\Exports;

	use Illuminate\Contracts\View\View;
	use Maatwebsite\Excel\Concerns\FromView;

	use App\Category;

	class CategoryExport implements FromView {
		public function view(): View{
			return view('categories.excel', [
				'categories' => Category::all()
		 	]);
		}
	}
?>