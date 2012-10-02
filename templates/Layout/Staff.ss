<h1>$Title</h1>
<% control Photo.SetWidth(280) %>
<img src="$URL" class="staffPhoto photo" alt="<% _t(STAFF.FacePicture, 'Face picture of %> $Title"/>
<% end_control %>

<table class="table table-striped smallTable">
<% if JobTitle %>
<tr>
<th>Job Title</th>
<td>$JobTitle</td>
</tr>
<tr>
<% end_if %>

<% if TelephoneNumberDesk %>
<th>Phone</th>
<td>$TelephoneNumberDesk</td>
</tr>
<tr>
<% end_if %>

<% if TelephoneNumberMobile %>
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

$Content

<%-- ensure likes button below everything --%>
<div class="clearall">&nbsp;</div>