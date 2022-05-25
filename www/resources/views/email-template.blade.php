<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Нове оголошення!</div>
                  <div class="card-body">
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('A fresh mail has been sent to your email address.') }}
                       </div>
                   @endif
                <div>
                  <div class="card-email">Email: - {!! $email !!}</div> 
                </div>
                <div>
                   <div class="card-name">Name: - {!! $name !!}</div> 
                </div>
                <div>
                  <div class="card-subject">Subject: - {!! $subject !!}</div> 
                </div>
                <div>
                <div class="card-content">Content: - {!! $content !!}</div> 
                </div>
             </div>
         </div>
     </div>
  </div>