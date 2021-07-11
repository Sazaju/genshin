<nav id="inventory-tab-list">
	<button onclick="openInventoryTab('weapons')">Armes</button>
	<button onclick="openInventoryTab('artifacts')">Artéfacts</button>
	<button onclick="openInventoryTab('objects')">Objets d'améliorations</button>
	<button onclick="openInventoryTab('food')">Nourriture</button>
	<button onclick="openInventoryTab('materials')">Matériaux</button>
	<button onclick="openInventoryTab('gadgets')">Gadgets</button>
	<button onclick="openInventoryTab('quests')">Quêtes</button>
	<button onclick="openInventoryTab('precious')">Objects précieux</button>
	<button onclick="openInventoryTab('furnishings')">Décorations</button>
	<script type="text/javascript">
		function openInventoryTab(idToDisplay) {
			$("#inventory-tabs").children().each((index, tab) => tab.style.display = (tab.id === idToDisplay ? "block" : "none"));
			const isClickedButton = (button) => $(button).attr('onclick').includes("'"+idToDisplay+"'");
			$("#inventory-tab-list").children("button").each((index, button) => button.className = (isClickedButton(button) ? "selected" : undefined));
			localStorage.currentInventoryTab = idToDisplay;
		}
		// Show weapons by default
		$(document).ready(() => openInventoryTab(localStorage.currentInventoryTab ?? "weapons"));
	</script>
</nav>
<div id="inventory-tabs">
	<div id="weapons"><?php include "./html/inventory/weapons.php"; ?></div>
	<div id="artifacts"><?php include "./html/inventory/artifacts.php"; ?></div>
	<div id="objects"><?php include "./html/inventory/objects.php"; ?></div>
	<div id="food"><?php include "./html/inventory/food.php"; ?></div>
	<div id="materials"><?php include "./html/inventory/materials.php"; ?></div>
	<div id="gadgets"><?php include "./html/inventory/gadgets.php"; ?></div>
	<div id="quests"><?php include "./html/inventory/quests.php"; ?></div>
	<div id="precious"><?php include "./html/inventory/precious.php"; ?></div>
	<div id="furnishings"><?php include "./html/inventory/furnishings.php"; ?></div>
</div>
