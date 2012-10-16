<h1>$Title</h1>
<% control Photo.SetWidth(280) %>
<img src="$URL" class="staffPhoto" alt="<% _t(STAFF.FacePicture, 'Face picture of %> $Title"/>
<% end_control %>

<table class="table table-striped smallTable">
<% if JobTitle %>
<tr>
<th>Job Title</th>
<td>$JobTitle</td>
</tr>
<% end_if %>
<% if TelephoneNumberDesk %>
<tr>
<th>Phone</th>
<td>$TelephoneNumberDesk</td>
</tr>
<% end_if %>
<% if TelephoneNumberMobile %>
<tr>
<th>Phone (mobile)</th>
<td>$TelephoneNumberMobile</td>
</tr>
<% end_if %>
<% if Email %>
<tr>
<th>Email</th>
<td>$Email</td>
</tr>
<% end_if %>



</table>

<div class="clearall">&nbsp;</div>
$Content

