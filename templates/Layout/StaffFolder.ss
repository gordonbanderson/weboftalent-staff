<% cached StaffFolderCacheKey %>
<h1>$Title</h1>
$Content

<ul class="unstyled" id="staffFolderListing">
<% control PagedChildren(Staff,10) %>
<li>
<div class="photo">
<% control Photo.SetWidth(100) %>
<img src="$URL" />
<% end_control %>

</div>
<h3>$Title</h3>
$Content.Summary(40)
<div class="clearall">&nbsp;</div>

</li>
<% end_control %>


</ul>

<div class="clearall">&nbsp;</div>

<% include Pagination %>



<% end_cached %>