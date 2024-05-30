 <div class="container" id="pretraga">
    <form action="{{ route("search") }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="search">{{ trans('search.search_text') }}</label>
            <input type="text" id="search" name="search" class="form-control" value="" />
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="category">{{ trans('search.category') }}</label>
                <select id="category" name="category" class="form-control">
                    <option class="all" data-category="all" value="all">Sve</option>
                    @foreach($categories as $category)
                         <option data-category="{{ $category->id }}" value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="subcategory">{{ trans('search.subcategory') }}</label>
                <select id="subcategory" name="subcategory" class="form-control">
                    <option class="all" value="all">Sve</option>
                    @foreach($subcategories as $subcategory)
                         <option class="category-{{ $subcategory->parent_id }}" value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="tag">{{ trans('search.tag') }}</label>
                <select id="tag" name="tag" class="form-control">
                    <option value="all">Svi</option>
                    @foreach($tags as $tag)
                         <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div>
            <input class="btn btn-alicorn" type="submit" value="{{ trans('search.submit') }}">
        </div>
    </form>
</div>