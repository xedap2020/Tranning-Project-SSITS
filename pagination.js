const data = [];
    const rowsPerPage = 16; 
    let currentPage = 1;

    // Tạo dữ liệu giả định
    for (let i = 1; i <= 68; i++) {
        data.push({
            id: `000${i}`,
            name: `Nguyễn Văn ${String.fromCharCode(64 + (i % 26))}`,
            date: `2025-01-01`,
            status: `Đang hoạt động`
        });
    }

    // Hàm hiển thị dữ liệu cho từng trang
    function renderTable(page) {
        const tableBody = document.getElementById("table-body");
        tableBody.innerHTML = ""; // Xóa dữ liệu cũ

        // Xác định vị trí bắt đầu và kết thúc của dữ liệu trên trang hiện tại
        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        const paginatedItems = data.slice(start, end);

        paginatedItems.forEach((item) => {
            const row = `
                <tr>
                    <td><input type="checkbox" class="custom-checkbox"></td>
                    <td>${item.id}</td>
                    <td>${item.name}</td>
                    <td>${item.date}</td>
                    <td>${item.status}</td>
                    <td>
                        <div class="action-buttons">
                            <button class="edit-button">Sửa</button>
                            <button class="delete-button">Xóa</button>
                        </div>
                    </td>
                </tr>
            `;
            tableBody.innerHTML += row;
        });

        renderPagination();
    }

    // Hàm hiển thị phân trang
    function renderPagination() {
        const paginationNumbers = document.getElementById("pagination-numbers");
        paginationNumbers.innerHTML = "";

        const totalPages = Math.ceil(data.length / rowsPerPage);

        let buttons = "";

        // Nút Previous
        buttons += `<button class="pagination-btn previous" ${currentPage === 1 ? "disabled" : ""} onclick="changePage(-1)">← Previous</button>`;

        // Số trang hiển thị
        for (let i = 1; i <= totalPages; i++) {
            if (i === 1 || i === totalPages || Math.abs(i - currentPage) < 2 || i === currentPage - 2 || i === currentPage + 2) {
                buttons += `<button class="pagination-btn ${i === currentPage ? "active" : ""}" onclick="goToPage(${i})">${i}</button>`;
            } else if (i === currentPage - 3 || i === currentPage + 3) {
                buttons += `<span class="pagination-dots">...</span>`;
            }
        }

        // Nút Next
        buttons += `<button class="pagination-btn next" ${currentPage === totalPages ? "disabled" : ""} onclick="changePage(1)">Next →</button>`;

        paginationNumbers.innerHTML = buttons;
    }

    // Chuyển trang
    function changePage(change) {
        const totalPages = Math.ceil(data.length / rowsPerPage);
        currentPage += change;
        if (currentPage < 1) currentPage = 1;
        if (currentPage > totalPages) currentPage = totalPages;
        renderTable(currentPage);
    }

    // Đi đến trang cụ thể
    function goToPage(page) {
        currentPage = page;
        renderTable(currentPage);
    }

    // Hiển thị dữ liệu trang đầu tiên
    window.onload = () => renderTable(1);
window.onload = () => renderTable(1);
