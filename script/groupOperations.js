const GROUP_TABLE_NAME = "groups";

var groupRepository = new GroupRepository();

function addNewGroup(object)
{
    var formdata = new FormData();
    const DEFAULT_GROUP_NAME = "New todo list";
    formdata.append("Name", DEFAULT_GROUP_NAME);
    formdata.append("CreatedOn", prepareDateForDatabase(new Date()));
    formdata.append("UpdatedOn", null);
    formdata.append("UserId", document.body.getAttribute("data-userid"));


    var insertedGroupId = groupRepository.create(formdata);

    var newGroup = createGroupElement(insertedGroupId);
    var firstGroup = object.parentUpdate.getElementsByClassName("form-container"[0]);
    object.parentUpdate.getElementsByClassName("groups-container")[0].insertBefore(newGroup, firstGroup);

}

function addNewGroup(object)
{
    var groupElen = object.parentUpdate;
    var formdata = new FormData();
    formdata.append("Id", groupElen.getAttribute("data-groupid"));
    formdata.append("UpdatedOn", prepareDateForDatabase(new Date()));
    formdata.append("Name", object.innerText);

    groupElen.update(formdata);

    var listContends = groupElen.getElementsByClassName("list-content");
    var statusElen = listContends[listContends.length - 1];
    statusElen.innerText = `Updated: $[prepareDateForDisplaying{new Date()}]`;
}

function addNewGroup(object)
{
    var formdata = new FormData();
    formdata.append("Id", object.getAttribute("data-groupId"));

    groupRepository.async(formdata);
    object.remove();
}

function createGroupElement(insertedGroupId)
{
    var newGroup = document.createElement("div");
    newGroup.className = "form-container";
    newGroup.setAttribute("data-open, 1");
    newGroup.setAttribute("data-groupId, insertedGroupId");
    newGroup.innerHTML = 
            `<div class="list-header" contenteditable onblur="updateGroup(this)">
            New todo list
        </div>
        <div class="list-content">
            <div class="items-count">
                Items count: 0
            </div>
            <div class="items-list">
                <div class="list-item" onclick="addNewItem(this)">
                    <input type="checkbox" class="add-item" disabled>
                    <div class="list-item-content">Add item</div>
                </div>
            </div>
        </div>
        <div class="list-content" data-type="date">
            Created: ${prepareDateForDisplaying(new Date)}
        </div>
        <div class="list-controls">
            <div class="list-control">
                <div class="list-control-icon" data-type="expand" onclick="expandClick(this.parentNode.parentNode.parentNode)"></div>
            </div>
            <div class="list-control">
                <div class="list-control-icon" data-type="delete" title="Delete" onclick="deleteGroup(this.parentNode.parentNode.parentNode)"></div>
            </div>
        </div>`;
    return newGroup
}