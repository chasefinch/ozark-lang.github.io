<a href='javascript:void(0);' class='subnav-open'>Documentation Menu</a>
<div class="subnav">
  <ul class="nav">
    <li<?php if($subpage == 'index') echo " class='active'"; ?>><a href="/language-documentation">Overview</a></li>
    <li<?php if($subpage == 'object-oriented') echo " class='active'"; ?>><a href="/language-documentation/object-oriented">Object Orientation</a></li>
    <li<?php if($subpage == 'literals' || $submenu == 'literals') echo " class='active'"; ?>><a href="/language-documentation/literals/">Literals</a></li>
    <li class='tier<?php if($subpage == 'types') echo " active"; ?>'><a href="/language-documentation/literals/types">Types</a></li>
    <li<?php if($subpage == 'variables' || $submenu == 'variables') echo " class='active'"; ?>><a href="/language-documentation/variables/">Variables</a></li>
    <li class='tier<?php if($subpage == 'objects') echo " active"; ?>'><a href="/language-documentation/variables/objects">Objects</a></li>
    <li class='tier<?php if($subpage == 'optionals') echo " active"; ?>'><a href="/language-documentation/variables/optionals">Optionals</a></li>
    <li class='tier<?php if($subpage == 'collections') echo " active"; ?>'><a href="/language-documentation/variables/collections">Collections</a></li>
    <li<?php if($subpage == 'control-flow') echo " class='active'"; ?>><a href="/language-documentation/control-flow">Control Flow</a></li>
    <li<?php if($subpage == 'methods') echo " class='active'"; ?>><a href="/language-documentation/methods">Methods</a></li>
    <li<?php if($subpage == 'data-types' || $submenu == 'data-types') echo " class='active'"; ?>><a href="/language-documentation/data-types/">Data Types</a></li>
    <li class='tier<?php if($subpage == 'classes') echo " active"; ?>'><a href="/language-documentation/data-types/classes">Classes</a></li>
    <li class='tier<?php if($subpage == 'structures') echo " active"; ?>'><a href="/language-documentation/data-types/structures">Structures</a></li>
    <li class='tier<?php if($subpage == 'enumerations') echo " active"; ?>'><a href="/language-documentation/data-types/enumerations">Enumerations</a></li>
    <li class='tier<?php if($subpage == 'nesting') echo " active"; ?>'><a href="/language-documentation/data-types/nesting">Nesting</a></li>
  </ul>
</div>