// Fetch product data from JSON file
fetch('data.json')
    .then(response => response.json())
    .then(products => {
        const container = document.getElementById('product-container');

        // Display Product Cards
        products.forEach(product => {
            const card = document.createElement('div');
            card.className = "bg-white rounded-lg shadow-lg overflow-hidden cursor-pointer transform transition duration-300 hover:scale-105";
            card.innerHTML = `
                <img src="${product.image}" alt="${product.name}" class="w-full h-48 object-contain">
                <div class="p-4">
                    <h2 class="text-lg font-bold">${product.name}</h2>
                    <p class="text-gray-600">${product.price}</p>
                </div>
            `;
            card.addEventListener('click', () => openModal(product));
            container.appendChild(card);
        });
    })
    .catch(error => console.error("Error loading products:", error));

// Open Modal
function openModal(product) {
    const modal = document.getElementById('modal');
    const modalContent = document.getElementById('modal-content');
    const whatsappBtn = document.getElementById('whatsapp-btn');

    // Create product details dynamically
    let detailsHTML = `
        <h2 class="text-2xl font-bold mb-2">${product.name}</h2>
        <p class="text-gray-700 capitalizepy"><strong>Price:</strong> ${product.price}</p>
        <p class="text-gray-700 capitalizepy"><strong>Minimum Order:</strong> ${product.minOrder}</p>
        <table class="w-full mt-4 border-collapse border border-gray-300">
    `;

    // Loop through all dynamic details, including nested objects
    function generateDetailsHTML(details) {
        let html = "";
        for (let key in details) {
            if (typeof details[key] === "object") {
                // If the value is an object, loop through its properties
                html += `<tr><td class="border capitalizepy px-3 py-2 font-semibold">${key.replace(/_/g, ' ')}</td><td class="border px-3 py-2">`;
                html += `<table class="w-full border-collapse border border-gray-200">`;
                for (let subKey in details[key]) {
                    html += `
                        <tr>
                            <td class="border capitalizepy px-3 py-2 font-semibold">${subKey.replace(/_/g, ' ')}</td>
                            <td class="border capitalizepy px-3 py-2">${details[key][subKey]}</td>
                        </tr>
                    `;
                }
                html += `</table></td></tr>`;
            } else {
                // Display regular key-value pairs
                html += `
                    <tr>
                        <td class="border px-3 capitalize py-2 font-semibold">${key.replace(/_/g, ' ')}</td>
                        <td class="border px-3 capitalize py-2">${details[key]}</td>
                    </tr>
                `;
            }
        }
        return html;
    }

    detailsHTML += generateDetailsHTML(product.details);
    detailsHTML += `</table>`;

    modalContent.innerHTML = detailsHTML;

    // WhatsApp Contact Link
    const whatsappNumber = "919876543210";  // Change this to your actual WhatsApp number
    const message = encodeURIComponent(`Hi, I'm interested in ${product.name}. Please share more details.`);
    whatsappBtn.href = `https://wa.me/${whatsappNumber}?text=${message}`;

    modal.classList.remove('hidden');

    // Add event listener to close button
    document.getElementById('close-btn').addEventListener('click', closeModal);
}

// Close Modal
function closeModal() {
    document.getElementById('modal').classList.add('hidden');
}
