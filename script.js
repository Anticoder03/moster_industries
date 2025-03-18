document.addEventListener("DOMContentLoaded", function () {
    const products = [
        {
            id: 1,
            name: "Ceramic Coated Pay Off Pulley",
            price: "₹3,200 / Piece",
            minOrder: "6 Piece",
            image: "./img/prod1-1.jpg",
            details: {
                productType: "Ceramic Coated Pulley",
                grooves: "Single Groove",
                usage: "Pay Off",
                capacity: "One Year Warranty",
                origin: "Made in India",
                description: "Used in bunching machines in cable industries.",
                additionalInfo: { deliveryTime: "7 days" }
            }
        },
        {
            id: 2,
            name: "100mm Black Ceramic Pulleys",
            price: "₹22,000 / Unit",
            image: "./img/prod2-1.jpg",
            details: {
                Usage: "Cable Industries",
                NumberOfGrooves: "Single Groove",
                ProductType: "Copper Wire Guide Pulley",
                Diameter: "50mm",
                Capacity: "One Year Warranty",
                ProductMaterial: "Ceramic Coated",
                description: "This is a guide pulley for cable industries.",
                origin: "Made in India",
                additionalInfo: { deliveryTime: "3-4 days" }
            }
        },
        {
            id: 3,
            name: "Capston Pulley With Ceramic Coated",
            price: "₹25,000 / Unit",
            image: "./img/prod3-1.jpg",
            details: {
                ProductType: "Capstone Pulley",
                Usage: "Cable Industries",
                NumberOfGrooves: "Single Groove",
                CountryOfOrigin: "Made in India",
                description: "This is a guide pulley for cable industries.",
                origin: "Made in India",
                additionalInfo: { deliveryTime: "3-4 days" }
            }
        },
        {
            id: 4,
            name: "Flyer Pulley Ceramic Coated",
            price: "₹7,800 / Piece",
            minOrder: "1 Meter",
            image: "./img/prod4-1.jpg",
            details: {
                Material: "Aluminum",
                productType: "Ceramic coated",
                grooves: "Single Groove",
                Brand: "MOSTER METAL",
                origin: "Made in India",
                description: "This part is used in RBD machines in cable industries.",
                additionalInfo: { deliveryTime: "7 days" }
            }
        },
        {
            id: 5,
            name: "Ceramic Coated Multi Groove Pulley",
            price: "₹8,000 / Piece",
            minOrder: "1 Piece",
            image: "./img/prod5-1.jpg",
            details: {
                Material: "Aluminum",
                productType: "Plasma coated pulley",
                NumberOfGrooves: "Multi-Groove",
                usage: "Rotating Machinery",
                capacity: "10,000 RPM",
                origin: "Made in India",
                description: "Multi-groove pulley used in cable industries.",
                additionalInfo: { deliveryTime: "3 days" }
            }
        },
        {
            id: 5,
            name: "hello",
            price: "₹8,000 / Piece",
            minOrder: "1 Piece",
            image: "./img/prod5-1.jpg",
            details: {
                Material: "Aluminum",
                productType: "Plasma coated pulley",
                NumberOfGrooves: "Multi-Groove",
                usage: "Rotating Machinery",
                capacity: "10,000 RPM",
                origin: "Made in India",
                description: "Multi-groove pulley used in cable industries.",
                additionalInfo: { deliveryTime: "3 days" }
            }
        }
    ];

    const productContainer = document.getElementById("product-container");
    const modal = document.getElementById("modal");
    const modalContent = document.getElementById("modal-content");
    const closeBtn = document.getElementById("close-btn");
    const whatsappBtn = document.getElementById("whatsapp-btn");

    // Render products
    products.forEach(product => {
        const productCard = document.createElement("div");
        productCard.classList.add("bg-white", "p-4", "rounded-lg", "shadow-lg", "hover:shadow-xl", "cursor-pointer");

        productCard.innerHTML = `
            <img src="${product.image}" alt="${product.name}" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-lg font-semibold text-gray-800">${product.name}</h3>
            <p class="text-gray-600">${product.price}</p>
            <button class="mt-2 bg-orange-500 text-white py-1 px-3 rounded-full hover:bg-orange-600">View Details</button>
        `;

        productCard.addEventListener("click", () => showProductDetails(product));

        productContainer.appendChild(productCard);
    });

    // Show modal with product details
    function showProductDetails(product) {
        modalContent.innerHTML = `
            <h2 class="text-2xl font-bold text-gray-800">${product.name}</h2>
            <img src="${product.image}" alt="${product.name}" class="w-full h-60 object-cover my-4 rounded-md">
            <p class="text-lg font-semibold text-gray-600">${product.price}</p>
            <p class="text-gray-700 mt-2"><strong>Description:</strong> ${product.details.description}</p>
            <p class="text-gray-700"><strong>Origin:</strong> ${product.details.origin}</p>
            <p class="text-gray-700"><strong>Delivery Time:</strong> ${product.details.additionalInfo.deliveryTime}</p>
        `;

        const whatsappMessage = `Hello, I'm interested in the ${product.name} (${product.price}). Can you provide more details?`;
        whatsappBtn.href = `https://wa.me/?text=${encodeURIComponent(whatsappMessage)}`;

        modal.classList.remove("hidden");
    }

    // Close modal
    closeBtn.addEventListener("click", () => {
        modal.classList.add("hidden");
    });

    // Close modal on outside click
    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.classList.add("hidden");
        }
    });
});
