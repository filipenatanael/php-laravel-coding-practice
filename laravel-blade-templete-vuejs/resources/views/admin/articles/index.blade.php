@extends('layouts.app')

@section('content')
  <container size="12">
    @if ($errors->all())
      @foreach ($errors->all() as $key => $value)
        <div class="alert alert-danger alert-dismissible fade in">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Danger! </strong> {{ $value }}
        </div>
      @endforeach
    @endif
    <panel-content title="List of articles">
      <bread-crumb v-bind:list="{{$breadCrumb}}"></bread-crumb>

      <table-component
      v-bind:titles="['#','Title','Description','Date']"
      v-bind:itens="{{ json_encode($ListOfArticles) }}"
      order="asc"
      orderColumn="1"
      create="#create"
      detail="/admin/articles/"
      edit="/admin/articles/"
      _delete="/admin/articles/"
      token="{{ csrf_token() }}"
      modal="yes"
      ></table-component>

      <div align="center">
        {{ $ListOfArticles->links() }}
        {{-- {{ $ListOfArticles }} --}}
      </div>

    </panel-content>
  </container>

  <!-- Modal to add -->
  <modal-content id="addModal" title="Adding Modal">
    <form-component
    id="myModalAdd"
    css=""
    action="{{ route('articles.store') }}"
    method="post" enctype=""
    token="{{ csrf_token() }}"
    >
    <div class="form-group">
      <label for="recipient-name" class="control-label">Title:</label>
      <input type="text" class="form-control" name="title" id="title" v-model="$store.state.item.title">
    </div>
    <div class="form-group">
      <label for="date" class="control-label">Date:</label>
      <input type="date" class="form-control" name="date" id="date" v-model="$store.state.item.date">
    </div>
    <div class="form-group">
      <label for="content" class="control-label">Content:</label>
      <textarea class="form-control" name="content" id="content" v-model="$store.state.item.content"></textarea>
    </div>
    <div class="form-group">
      <label for="message-text" class="control-label">Description:</label>
      <textarea class="form-control" name="description" id="description" v-model="$store.state.item.description"></textarea>
    </div>
  </form-component>
  <span slot="buttons">
    <button form="myModalAdd" class="btn btn-info">Create Course</button>
  </span>
</modal-content>

<!-- Modal to edit -->
<modal-content id="editModal" title="Edit Modal">
  <form-component
  css=""
  v-bind:action="`/admin/articles/${$store.state.item.id}`"
  method="put"
  enctype="multipart/form-data"
  token="{{ csrf_token() }}"
  >
  <div class="form-group">
    <label for="recipient-name" class="control-label">Title:</label>
    <input type="text" class="form-control" name="title" id="title" v-model="$store.state.item.title">
  </div>
  <div class="form-group">
    <label for="message-text" class="control-label">Description:</label>
    <textarea class="form-control" name="description" id="description" v-model="$store.state.item.description"></textarea>
  </div>
  <button class="btn btn-info">Save Changes</button>
</form-component>
</modal-content>

<!-- Modal to show detatils -->
<modal-content id="detailsModal">
  <h4 class="modal-title" id="exampleModalLabel"><b>@{{ $store.state.item.title }}</b></h4>
  <div class="modal-body">
    <p>@{{ $store.state.item.description }}</p>
  </div>
</modal-content>

@endsection
