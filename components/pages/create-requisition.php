<?php
$page_title = "Create Requisition ";
$page = 'Add Requisition ';
$show_breadcrumb = true;
?>
<form action="#">
    <div class="row">
        <div class="col-xxl-12">
            <div class="row gy-10">
                <div class="col-xl-12">
                    <div class="card__wrapper">
                        <div class="row gy-20">
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="project">Project <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control" name="role" id="role">
                                            <option value="project1">Project-1</option>
                                            <option value="project2">Project-2</option>
                                            <option value="project3">Project-3</option>
                                            <option value="project4">Project-4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Requires Date <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" id="purchaseDate" type="text" placeholder="" readonly="readonly">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label> Description
                                            <span>*</span></label>
                                    </div>
                                    <div class="from__input-box">
                                        <textarea id="tinymce_simple_textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label> Remark
                                            <span>*</span></label>
                                    </div>
                                    <div class="fullwidth-textarea form__input">
                                        <textarea rows="3"></textarea>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card__wrapper">
        <h3>Items</h3>

        <div id="itemWrapper">

            <div class="row itemRow d-flex align-items-end mb-3">

                <div class="col-md-2">
                    <label class="form-label">Unit</label>
                    <select class="form-select unit">
                        <option value="">Select Unit</option>
                        <option>A Unit</option>
                        <option>B Unit</option>
                        <option>C Unit</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control description" placeholder="description" />
                </div>

                <div class="col-md-2">
                    <label class="form-label">Quantity</label>
                    <input type="number" class="form-control quantity" value="0" />
                </div>

                <div class="col-md-2">
                    <label class="form-label">Unit Price</label>
                    <input type="number" class="form-control uPrice" value="0" step="0.01" />
                </div>

                <div class="col-md-2">
                    <button type="button" class="btn btn-danger w-100 remove">Remove</button>
                </div>

            </div>

        </div>

        <button type="button" class="btn btn-primary mt-3" id="addBtn">Add Item</button>
        <button type="button" class="btn btn-success mt-3" id="saveBtn">Save All</button>


    </div>




    <div class="submit__btn text-center mb-20">
        <button class="btn btn-primary">Add Requisition</button>
    </div>
</form>



<script>
    const addBtn = document.querySelector("#addBtn");
    const itemWrapper = document.querySelector("#itemWrapper");
    const saveBtn = document.querySelector("#saveBtn");

    /* Load Items From Storage */
    function loadItems() {
        let saved = localStorage.getItem("itemData");
        if (!saved) return;

        let items = JSON.parse(saved);

        items.forEach(item => {
            renderRow(item.unit, item.description, item.quantity, item.price);
        });
    }

    /* Render a Row */
    function renderRow(unit = "", description = "", quantity = 0, price = 0) {
        const div = document.createElement("div");
        div.classList.add("row", "itemRow", "d-flex", "align-items-end", "mb-3");

        div.innerHTML = `
            <div class="col-md-2">
                <select class="form-select unit">
                    <option value="">Select Unit</option>
                    <option ${unit === "A Unit" ? "selected" : ""}>A Unit</option>
                    <option ${unit === "B Unit" ? "selected" : ""}>B Unit</option>
                    <option ${unit === "C Unit" ? "selected" : ""}>C Unit</option>
                </select>
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control description" value="${description}">
            </div>

            <div class="col-md-2">
                <input type="number" class="form-control quantity" value="${quantity}">
            </div>

            <div class="col-md-2">
                <input type="number" class="form-control uPrice" value="${price}" step="0.01">
            </div>

            <div class="col-md-2">
                <button type="button" class="btn btn-danger w-100 remove">Remove</button>
            </div>
        `;

        itemWrapper.appendChild(div);
    }

    /* Add Item*/
    addBtn.addEventListener("click", () => {
        renderRow();
        saveToLocalStorage();
    });

    /* Remove Item */
    itemWrapper.addEventListener("click", (e) => {
        if (e.target.classList.contains("remove")) {
            e.target.closest(".itemRow").remove();
            saveToLocalStorage();
        }
    });

    /*  Auto Save on input */
    itemWrapper.addEventListener("input", saveToLocalStorage);

    /*  Save to LocalStorage*/
    function saveToLocalStorage() {
        let rows = document.querySelectorAll(".itemRow");
        let items = [];

        rows.forEach(row => {
            items.push({
                unit: row.querySelector(".unit").value,
                description: row.querySelector(".description").value,
                quantity: row.querySelector(".quantity").value,
                price: row.querySelector(".uPrice").value,
            });
        });

        localStorage.setItem("itemData", JSON.stringify(items));
    }

    /*  Final Save Button*/
    saveBtn.addEventListener("click", () => {
        let items = JSON.parse(localStorage.getItem("itemData") || "[]");
        console.log("Sending to backend:", items);
        alert("Check console!");
    });

    /*  Load Saved Items*/
    loadItems();
</script>

