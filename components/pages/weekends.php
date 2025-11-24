<?php
$page_title = "Weekends page";
$page = 'Weekends';
$addPage = true;
$show_breadcrumb = true;
$content = '
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="m-0 text-light">Weekend Schedules</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-secondary">
                    <tr>
                        <th>ID</th>
                        <th>Day</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Is Weekend</th>
                    </tr>
                </thead>
                <tbody id="weekendTable">
                </tbody>
            </table>
 
            <button class="btn btn-primary" onclick="saveWeekend()">Save Changes</button>
        </div>
    </div>
</div>           
';
include "../layouts/master.php";
?>
<script>
    const days = [
        { id: 1, name: "Sunday", start: "10:00", end: "19:00", weekend: false },
        { id: 2, name: "Monday", start: "10:00", end: "19:00", weekend: true },
        { id: 3, name: "Tuesday", start: "10:00", end: "19:00", weekend: true },
        { id: 4, name: "Wednesday", start: "10:00", end: "19:00", weekend: true },
        { id: 5, name: "Thursday", start: "10:00", end: "19:00", weekend: true },
        { id: 6, name: "Friday", start: "04:00", end: "19:00", weekend: true },
        { id: 7, name: "Saturday", start: "10:00", end: "19:00", weekend: true },
    ];

    function loadTable() {
        let rowHTML = "";
        days.forEach(d => {
            rowHTML += `
                <tr>
                    <td>${d.id}</td>
                    <td>${d.name}</td>
                    <td><input type="time" class="form-control" value="${d.start}" onchange="updateTime(${d.id}, 'start', this.value)" /></td>
                    <td><input type="time" class="form-control" value="${d.end}" onchange="updateTime(${d.id}, 'end', this.value)" /></td>
                    <td>
                        <input type="checkbox" class="weekend-check" ${d.weekend ? "checked" : ""} 
                        onchange="toggleWeekend(${d.id}, this.checked)">
                    </td>
                </tr>
            `;
        });
        document.getElementById("weekendTable").innerHTML = rowHTML;
    }

    function updateTime(id, field, value) {
        const day = days.find(d => d.id === id);
        day[field] = value;
    }

    function toggleWeekend(id, checked) {
        const day = days.find(d => d.id === id);
        day.weekend = checked;
    }

    function saveWeekend() {
        console.log("Updated Weekend Data:", days);
        alert("Weekend schedule updated successfully!");
    }

    loadTable();
</script>

