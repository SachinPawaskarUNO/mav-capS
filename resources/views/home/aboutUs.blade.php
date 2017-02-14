@extends('layouts.app')
@section('content')
   <div class = "container" >
       <img src="images/logo.png" alt="newsLetterImage" class="img-fluid">
       </div>

   <div class="container-fluid" style="padding:10px">
       <div class="row">
           <div class="col-sm-12">
           <div class="col-sm-6">
               <p>
               <h2>What We Do?</h2>
               Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
               totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt,
               explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur
               magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia
               quo voluptas nulla pariatur?
               </p>
               </div>
       <div class="col-sm-6">
           <h1>News Letter SignUp</h1>
           @if (count($errors) > 0)
               <div class = "alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                       @endforeach
                       </ul>
               </div>
           @endif
           @if (session('status'))
               <div class="alert alert-success">
                   {{ session('status') }}
               </div>
           @endif
           {!! Form::open(['url' => 'newsletter']) !!}
           <div class="form-group">
               {!! Form::label('newsletter_first_name', 'First Name:') !!}
               {!! Form::text('newsletter_first_name',null,['class'=>'form-control']) !!}
           </div>
           <div class="form-group">
               {!! Form::label('newsletter_last_name', 'Last Name:') !!}
               {!! Form::text('newsletter_last_name',null,['class'=>'form-control']) !!}
           </div>
           <div class="form-group">
               {!! Form::label('newsletter_email', 'Email:') !!}
               {!! Form::text('newsletter_email',null,['class'=>'form-control']) !!}
           </div>
           <div class="form-group">
               {!! Form::label('newsletter_user_type', 'UserType:') !!}
               {!! Form::select('newsletter_user_type', array('businessOwner' =>'Business Owner','investor' =>'Investor')) !!}
           </div>
           <div class="form-group">
               {!! Form::submit('Save', ['class' => 'btn btn-primary form-control', 'style'=>'width:70px;']) !!}
           </div>
           </div>
           </div>
   </div>
       </div>
@endsection