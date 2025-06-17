<h2>New Contact Form Submission</h2>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
@if(!empty($data['website']))
<p><strong>Website:</strong> {{ $data['website'] }}</p>
@endif
<p><strong>Message:</strong></p>
<p>{{ $data['message'] }}</p>
