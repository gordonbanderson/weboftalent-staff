<h1>$Title</h1>
<% control Photo.SetWidth(280) %>
<img src="$URL" class="staffPhoto" alt="<% _t(STAFF.FacePicture, 'Face picture of %> $Title"/>
<% end_control %>

<table class="table table-striped smallTable">
<tr>
<th>Job Title</th>
<td>$JobTitle</td>
</tr>
<tr>
<th>Phone</th>
<td>$TelephoneNumberDesk</td>
</tr>
<tr>
<th>Phone (mobile)</th>
<td>$TelephoneNumberMobile</td>
</tr>
<tr>
<th>Email</th>
<td>$Email</td>
</tr>


</table>

<div class="clearall">&nbsp;</div>
$Content

