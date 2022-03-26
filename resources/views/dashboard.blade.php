<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    all post data




                    <br>
                    <table>
                        <tr>
                          <th>Name</th>
                          <th>Title </th>
                          <th>Budy</th>
                          <th>Action</th>
                        </tr>
                        @foreach ($post as $post)
                        <tr>
                          <td>{{$post->user->name}}</td>
                          <td>{{$post->title}}</td>
                          <td>{{$post->body}}</td>
                          <td> <a href=" {{ url('/post/edit',$post->id) }}"> Edit</a>
                            <a href="{{url('post/delete', $post->id)}}">Delete</a>
                        </tr>
                        @endforeach
                      </table>
                      @if (session()->has('status'))
                      {{session('status')}}

                      @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
