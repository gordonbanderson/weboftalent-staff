<% cached StaffFolderCacheKey %>
<h1>$Title</h1>
$Content
<%-- need to prime paged children first --%>
$SetPagedOffset(0)

<% control PagedChildren(Staff,9) %><% end_control %>


<% control SplitSetIntoGridRows(LastPagedResults|3) %>
<div class="row">
<% control Columns %>
<div class="span3 newsItemCell">
<a href="$Link"><h3>$Title</h3></a>

<div class="photo">
<a href="$Link"><% control Photo.SetWidth(280) %>
<img src="$URL" class="colour hide" />
<% end_control %>
</a>

<% control Photo %>
<% control GreyscaleImage(30 30 30 280) %>
<img class="greyscale" src="$URL"/>
<% end_control %>
<% end_control %>

</div>

$Content.Summary(40)

</div>


<% end_control %>
</div>
<% end_control %>



<hr/>
<div class="clearall">&nbsp;</div>



<% include Pagination %>

<% end_cached %>