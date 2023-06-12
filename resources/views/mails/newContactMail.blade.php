<!DOCTYPE html>
<html>
<head>
	<title>Meissa</title>
</head>
<body>

<center>
<h2 style="padding: 23px;background: #b3deb8a1;border-bottom: 6px green solid;">
	<a>Meissa: New Mail...</a>
</h2>
</center>

<p>Date: {{ date('d-F-Y H:i:s') }}</p>
</br>
<p>Dear <strong> Team - Meissa </strong></p>

<p>A new mail message from {{ $newContact->name }}</strong></p>
<p> Email: {{ $newContact->email }}</p>
<p> The message is as follows:</p>
<p> {{ $newContact->message }} </p>

<p>
	<br />
</p>

<p>
With best wishes
</p>

<p>
<strong>Team CLEAR - Meissa </strong>
</p>

</body>
</html>