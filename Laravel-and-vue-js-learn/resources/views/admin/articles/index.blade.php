@extends('layouts.app')

@section('content')
  <container size="12">
    <panel-content title="List of articles">
      <bread-crumb v-bind:list="{{$breadCrumb}}"></bread-crumb>



      <table-component
      v-bind:titles="['#','Title','Description']"
      v-bind:itens="{{ $ListOfArticles }}"
      order="asc"
      orderColumn="1"
      create="#create"
      detail="#detail"
      edit="#edit"
      _delete="#delete"
      token="10099649616"
      modal="yes"
      ></table-component>
    </panel-content>
  </container>

  <modal-content id="addModal">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="exampleModalLabel">New message</h4>
    </div>
    <div class="modal-body">

      <form-component
      css=""
      action=""
      method="post"
      enctype=""
      toekn=""
      >
        <div class="form-group">
          <label for="recipient-name" class="control-label">Title:</label>
          <input type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
          <label for="message-text" class="control-label">Description:</label>
          <textarea class="form-control" id="description"></textarea>
        </div>
        <button class="btn btn-info">Create Course</button>
      </form-component>

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Send message</button>
  </div>
</modal-content>

<modal-content id="editModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="exampleModalLabel">New message</h4>
  </div>
  <div class="modal-body">

    <form-component
    css=""
    action=""
    method="post"
    enctype=""
    toekn=""
    >
      <div class="form-group">
        <label for="recipient-name" class="control-label">Title:</label>
        <input type="text" class="form-control" id="title">
      </div>
      <div class="form-group">
        <label for="message-text" class="control-label">Description:</label>
        <textarea class="form-control" id="description"></textarea>
      </div>
      <button class="btn btn-info">Create Course</button>
    </form-component>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Send message</button>
</div>
</modal-content>

<modal-content id="detailsModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="exampleModalLabel">New message</h4>
  </div>
  <div class="modal-body">

    <form-component
    css=""
    action=""
    method="post"
    enctype=""
    toekn=""
    >
      <div class="form-group">
        <label for="recipient-name" class="control-label">Title:</label>
        <input type="text" class="form-control" id="title">
      </div>
      <div class="form-group">
        <label for="message-text" class="control-label">Description:</label>
        <textarea class="form-control" id="description"></textarea>
      </div>
      <button class="btn btn-info">Create Course</button>
    </form-component>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Send message</button>
</div>
</modal-content>

@endsection
