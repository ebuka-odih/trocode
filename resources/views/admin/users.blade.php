@extends('admin.layout.app')
@section('content')

    <div id="content" class="main-content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row layout-top-spacing">

                    <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Users</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-4">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Date</th>

                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <p class="align-self-center mb-0">{{ $item->name }}</p>
                                                </div>
                                            </td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>

                                            <td class="text-center">
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                                <a href="{{ route('admin.profile', $item->id) }}" class="btn btn-sm btn-primary">View</a>
                                            </td>

                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="code-section-container">

                                    <button class="btn toggle-code-snippet"><span>Code</span></button>

                                    <div class="code-section text-left">
                                            <pre class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-responsive"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table table-bordered table-striped mb-4"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Name<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Date<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Sale<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>Action<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"d-flex"</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"usr-img-frame mr-2 rounded-circle"</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"avatar"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"img-fluid rounded-circle"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"assets/img/boy.png"</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"align-self-center mb-0"</span>&gt;</span>Shaun<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>10/08/2020<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>320<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">" text-center"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">svg</span>&gt;</span> ... <span class="hljs-tag">&lt;/<span class="hljs-name">svg</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"d-flex"</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"usr-img-frame mr-2 rounded-circle"</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"avatar"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"img-fluid rounded-circle"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"assets/img/girl-1.png"</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>  <span class="hljs-attr">class</span>=<span class="hljs-string">"align-self-center mb-0"</span>&gt;</span>Alma<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>11/08/2020<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>420<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">svg</span>&gt;</span> ... <span class="hljs-tag">&lt;/<span class="hljs-name">svg</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"d-flex"</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"usr-img-frame mr-2 rounded-circle"</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"avatar"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"img-fluid rounded-circle"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"assets/img/girl-2.png"</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>  <span class="hljs-attr">class</span>=<span class="hljs-string">"align-self-center mb-0"</span>&gt;</span>Kelly<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>12/08/2020<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>130<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">svg</span>&gt;</span> ... <span class="hljs-tag">&lt;/<span class="hljs-name">svg</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"d-flex"</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"usr-img-frame mr-2 rounded-circle"</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"avatar"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"img-fluid rounded-circle"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"assets/img/boy-2.png"</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>  <span class="hljs-attr">class</span>=<span class="hljs-string">"align-self-center mb-0"</span>&gt;</span>Vincent<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>13/08/2020<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>260<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">svg</span>&gt;</span> ... <span class="hljs-tag">&lt;/<span class="hljs-name">svg</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    </pre>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection
