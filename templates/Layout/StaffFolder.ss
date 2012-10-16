<% cached StaffFolderCacheKey %>
<h1>$Title</h1>
$Content

<% if LinkToIndividualStaffPages %>
<ul class="thumbnails" id="staffFolderListingNOT">

<% control PagedChildren(Staff,10) %>
<li class="span5">
<div class="thumbnail">
<h2 class="centred"><a href="$Link">$Title</a></h2>
<a href="$Link"><% control Photo.SetWidth(470) %>
<img src="$URL" alt="Photograph of $Top.Title" />
<% end_control %></a>
<p class="caption">$JobTitle</p>
</div>
</li>

<% end_control %>
</ul>



<% else %>
<ul class="unstyled" id="staffFolderListing">
<% control PagedChildren(Staff,10) %>
<li>
<div class="photo">
<% control Photo.SetWidth(100) %>
<img src="$URL" alt="Photograph of $Top.Title" />
<% end_control %>

</div>
<h3><a href="$Link">$Title</a></h3>
$Content.Summary(40)
<div class="clearall">&nbsp;</div>

</li>
<% end_control %>


<% end_if %>

<div class="clearall">&nbsp;</div>

<% include Pagination %>
<% end_cached %>