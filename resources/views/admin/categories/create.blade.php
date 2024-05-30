@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.category.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.categories.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.category.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($category) ? $category->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.category.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="slug">{{ trans('cruds.category.fields.slug') }}*</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', isset($category) ? $category->slug : '') }}" required>
                @if($errors->has('slug'))
                    <em class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.category.fields.slug_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
                <label for="parent_id">{{ trans('cruds.category.fields.parent') }}*</label>
                <select id="parent" name="parent_id" class="form-control" value="{{ old('parent_id', isset($category) ? $category->parent_id : '') }}">
                    <option value="">None</option>
                    @foreach($parents as $parent)
                        <option value="{{$parent->id}}">{{$parent->name}}</option>
                    @endforeach
                </select>
                @if($errors->has('parent_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('parent_id') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.category.fields.slug_helper') }}
                </p>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection

@section('scripts')
<script>
  $('input[name="name"]').change(function(e) {
    $.get('{{ route('categories.check_slug') }}', 
      { 'name': $(this).val() }, 
      function( data ) {
        $('input[name="slug"]').val(data.slug);
      }
    );
  });
</script>
@endsection