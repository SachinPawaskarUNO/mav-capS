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
           @if (session('status'))
               <div class="alert alert-success">
                   {{ session('status') }}
               </div>
           @endif
           {!! Form::open(['url' => 'newsletter']) !!}
           <div class="form-group{{ $errors->has('newsletter_first_name') ? ' has-error' : '' }}">
               {!! Form::label('newsletter_first_name', 'First Name:') !!}
               {!! Form::text('newsletter_first_name',null,['class'=>'form-control']) !!}
               @if ($errors->has('newsletter_first_name'))
                   <span class="help-block">
                       <strong>{{ $errors->first('newsletter_first_name') }}</strong>
                   </span>
               @endif
           </div>
           <div class="form-group{{ $errors->has('newsletter_last_name') ? ' has-error' : '' }}">
               {!! Form::label('newsletter_last_name', 'Last Name:') !!}
               {!! Form::text('newsletter_last_name',null,['class'=>'form-control']) !!}
               @if ($errors->has('newsletter_last_name'))
                   <span class="help-block">
                       <strong>{{ $errors->first('newsletter_last_name') }}</strong>
                   </span>
               @endif
           </div>
           <div class="form-group{{ $errors->has('newsletter_email') ? ' has-error' : '' }}">
               {!! Form::label('newsletter_email', 'Email:') !!}
               {!! Form::email('newsletter_email',null,['class'=>'form-control']) !!}
               @if ($errors->has('newsletter_email'))
                   <span class="help-block">
                       <strong>{{ $errors->first('newsletter_email') }}</strong>
                   </span>
               @endif
           </div>
           <div class="form-group{{ $errors->has('newsletter_user_type') ? ' has-error' : '' }}">
               {!! Form::label('newsletter_user_type', ' User Type:') !!}
               {!! Form::select('newsletter_user_type', array(''=>'-- Please Select a User Type --','businessOwner' =>'Business Owner','investor' =>'Investor'),'',['class'=>'form-control']) !!}
               @if ($errors->has('newsletter_user_type'))
                   <span class="help-block">
                       <strong>{{ $errors->first('newsletter_user_type') }}</strong>
                   </span>
               @endif
           </div>
           <div class="form-group">
               {!! Form::submit('Save', ['class' => 'btn btn-primary form-control', 'style'=>'width:70px;']) !!}
           </div>
           </div>
           </div>
   </div>
       </div>
@endsection