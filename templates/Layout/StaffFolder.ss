<% cached StaffFolderCacheKey %>
<h1>$Title</h1>
$Content

<% if LinkToIndividualStaffPages %>
<ul class="thumbnails" id="staffFolderListingNOT">

<% loop PagedChildren(Staff,2) %>
<li class="span5">
<div class="thumbnail">
<h2 class="centred"><a href="$Link">$Title</a></h2>
<a href="$Link"><% with Photo.SetWidth(470) %>
<img src="$URL" alt="Photograph of $Top.Title" />
<% end_with %></a>
<p class="caption">$JobTitle</p>
</div>
</li>
<% end_loop %>
</ul>



<% else %>
<ul class="unstyled" id="staffFolderListing">
<% loop PagedChildren(Staff,2) %>
<li>
<div class="photo">
<% with Photo.SetWidth(100) %>
<img src="$URL" alt="Photograph of $Top.Title" />
<% end_with %>

</div>
<h3><a href="$Link">$Title</a></h3>
$Content.Summary(40)
<div class="clearall">&nbsp;</div>

</li>
<% end_loop %>


<% end_if %>

<div class="clearall">&nbsp;</div>
<% include Pagination %>
<% end_cached %>