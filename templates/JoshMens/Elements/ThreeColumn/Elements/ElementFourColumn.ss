<% if $Title && $ShowTitle %><h2 class="element__title">$Title</h2><% end_if %>

<% if $ColOne || $ColTwo || $ColThree || $ColFour %>
    <div class="row">
        <div class="col-sm-3 col-xs-12">
            <% if $ColOne %>$ColOne<% end_if %>
        </div>
        <div class="col-sm-3 col-xs-12">
            <% if $ColTwo %>$ColTwo<% end_if %>
        </div>
        <div class="col-sm-3 col-xs-12">
            <% if $ColThree %>$ColThree<% end_if %>
        </div>
        <div class="col-sm-3 col-xs-12">
            <% if $ColFour %>$ColFour<% end_if %>
        </div>
    </div>
<% end_if %>