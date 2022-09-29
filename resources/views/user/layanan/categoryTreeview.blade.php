@foreach($parentCategories as $category)
 
  {{$category->name}}

  @if(count($category->subcategory))
    @include('product.subCategoryList',['subcategories' => $category->subcategory])
  @endif
 
@endforeach