@extends('layouts.app')

@section('content')
<div id="g_id_onload"
     data-client_id="824588110807-32g2b6grasqud47olpv1nam4r5oq5rjp.apps.googleusercontent.com"
     data-context="signin"
     data-ux_mode="popup"
     data-login_uri="http://localhost:45101/identities/google-handle"
     data-nonce=""
     data-auto_select="true"
     data-itp_support="true">
</div>

<div class="g_id_signin"
     data-type="standard"
     data-shape="rectangular"
     data-theme="outline"
     data-text="signin_with"
     data-size="large"
     data-logo_alignment="left">
</div>
@endsection
