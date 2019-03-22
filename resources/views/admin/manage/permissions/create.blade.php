@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    @include('partials.error')
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Create New Permission</h1>
      </div>
    </div>
    <hr class="m-t-0">
        <form action="{{route('permissions.store')}}" method="POST">
          {{csrf_field()}}
          <div class="field">
            <label for="display_name" class="label">Name (Display Name)</label>
            <p class="control">
              <input type="text" class="input" name="display_name" id="display_name">
            </p>
          </div>

          <div class="field" >
            <label for="name" class="label">Slug</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name">
            </p>
          </div>

          <div class="field" >
            <label for="description" class="label">Description</label>
            <p class="control">
              <input type="text" class="input" name="description" id="description" placeholder="Describe what this permission does">
            </p>
          </div>
           <button class="button is-success">Create Permission</button>
        </form>
      </div>
    </div>
  </div>

   <!-- end of .flex-container -->

@endsection

