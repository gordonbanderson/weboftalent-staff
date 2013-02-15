$EnsureMenuHidden
<div class="span12">
<h1>$Title</h1>

<div class="row">
<div class="span4">
 <% with Photo.SetWidth(360) %>
 <img class="ServicePhoto centredImage screenshot" src="$URL" <% end_with %> alt="<% _t('Staff.FACE_PICTURE', 'Face picture of - ') %>
 $Title" title="<% _t('Staff.FACE_PICTURE', 'Face picture of') %> - $Title" />
<table class="table table-striped smallTable">
<% if JobTitle %>
<tr>
<th>Job Title</th>
<td>$JobTitle</td>
</tr>
<% end_if %>
<% if TelephoneNumberDesk %>
<tr>
<% end_if %>

<% if TelephoneNumberDesk %>
<th>Phone</th>
<td>$TelephoneNumberDesk</td>
</tr>
<% end_if %>
<% if TelephoneNumberMobile %>
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

</div>

<div class="span8">
<div class="tabbable">
<ul class="nav nav-tabs tabbed">
<li class="active"><a class="data-toggle-tab" href="#bio" data-toggle="tab">Bio</a></li>

<% control AllChildren %>
<li><a class="data-toggle-tab" href="#tab$Pos" data-toggle="tab">$Title</a></li>
<% end_control %>
</ul>

<div class="tab-content">
<div id="bio" class="tab-pane active">
$Content
</div>
<% control AllChildren %>
<div id="tab$Pos" class="tab-pane">
$Content
<% control AllChildren %>
<div class="row">
<div class="span1"><% control HomePageScreenShot %><% control Setwidth(70) %><img src="$URL" class="screenshot" /><% end_control %><% end_control %></div>
<div class="span6"><h5>$Title</h5>$Content</div>
</div>
<% end_control %>
</div>
<% end_control %>
</div>

</div><%-- tabbable --%>



<%-- ensure likes button below everything --%>

</div>
</div>
<div class="row"><div class="span12">
</div>

</div>
