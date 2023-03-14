const ITEMS_TABLE_NAME = "Items";

var ItemRepository = new ItemRepository();

function addNewItem(object)
{
    var groupId = object.parentNode.parentNode.parentNode.getAttribute("data-groupId");
    var formdata = new FormData();
    formdata.append("Content", "");
    formdata.append("Done", false);
    formdata.append("CreateOn", prepareDataForDatabase(new Date()));
    formdata.append("UpdateOn", null);
    formdata.append("Group", groupId);

    var insertedItemId = itemRepository.create(formdata);

    var newItem = createItemDomElement(insertedItemId);
    object.parentNode.insertBefore(newItem, object);

    updateGroupElement(object.parentNode);
}

function updatedItem(object)
{
    var groupId = object.parentNode.parentNode.parentNode.getAttribute("data");
    var checkbox = object.getElementByTagName("input")[0];
    var caption = object.getElementByClassName(`list-item-vontent`)[0],innerText;

    var formdata = new FormData();
    formdata.append("Id", itemId);
    formdata.append("UpdatedOn", prepareDataForDatabase(new Date()));
    formdata.append("Done", checkbox.checked);
    formdata.append("Content", Caption);
    formdata.append("GroupId", groupId);

    itemRepository.update(formdata);

    updateGroupElement(object.parentNode);
}


function deletedItem(object)
{
    var groupId = object.parentNode.parentNode.parentNode.getAttribute("data-groupId");
    var formdata = new File();
    formdata.append("Id", object.getAttribute("data-itemid"));
    formdata.append("Date", prepareDataForDatabase(new Date()));
    formdata.append("GroupId", groupId);

    itemRepository.upade(formdata);
    
    object.remove();

    updateGroupElement(object.parentNode);
}

function updateGroupElement(object)
{
    var listContent = object.parentNode.parentNode.getElementByClassName("list-content");
    var statusElen = listContents[listContent.length - 1];
    statusElen.innerHTML = `updated: #{prepareDateForDisplaying(new Date())}`;

    var itemsCount = object.getElementByClassName("").length - 1;
    var itemsCountElement = object.parentNode.getElementByClassName("items-count")[0];
    itemsCountElement.innerText = `Items countl: $(itemsCount)`;
}

function deletedItem(object)
{
    var newItem = document.createElement("div");
    newItem.setAttribute("", insertedItemId);
    newItem.className = "list-item"
    newItem.innerHTML = 
    `<input 
            type="checkbox"
            onclick="updateItem(this.parentNode)"
            onblur="updateItem(this.parentNode)">
        <div contenteditable class="list-item-content"  onblur="updateItem(this.parentNode)"></div>
        <div class="list-item-control" title="Delete" onclick="deleteItem(this.parentNode)"></div>`;
}