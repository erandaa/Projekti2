const flowers = [
    {
        discount: 0,
        image: "images/img-10.webp",
        name: "Butterfly Bush",
        price: 30,
    },
    {
        discount: 11,
        image: "images/img-11.webp",
        name: "Rose of Sharon",
        price: 43,
    },
    {
        discount: 0,
        image: "images/img-12.webp",
        name: "Shrub Roses",
        price: 30,
    },
    {
        discount: 7,
        image: "images/img-13.webp",
        name: "Tulip",
        price: 56,
    },
    {
        discount: 40,
        image: "images/img-14.webp",
        name: "Cosmos",
        price: 53,
    },
    {
        discount: 22,
        image: "images/img-2.webp",
        name: "Bellflower",
        price: 12,
    },
    {
        discount: 80,
        image: "images/img-1.webp",
        name: "Larkspur",
        price: 10,
    },
    {
        discount: 0,
        image: "images/img-3.webp",
        name: "Crocus",
        price: 32,
    },
    {
        discount: 10,
        image: "images/img-4.webp",
        name: "Gladiolus",
        price: 21,
    },
    {
        discount: 0,
        image: "images/img-5.webp",
        name: "Chrysanthemum",
        price: 28,
    },
    {
        discount: 42,
        image: "images/img-6.webp",
        name: "Alyssum",
        price: 70.99,
    },
    {
        discount: 0,
        image: "images/img-7.webp",
        name: "Peony",
        price: 8,
    },
    {
        discount: 23,
        image: "images/img-8.webp",
        name: "Loosestrife",
        price: 35,
    },
    {
        discount: 0,
        image: "images/img-9.webp",
        name: "Yarrow",
        price: 100,
    },
    {
        discount: 55,
        image: "images/img-15.webp",
        name: "Allium",
        price: 59.99,
    },
];

const calcPercentage = (percentage, price) => {
    const sum = price * (percentage / 100);
    const discount = parseFloat(price - sum).toFixed(2);
    return discount;
}

const flowerItem = (flower) => {
    const item = `
        <div class="box">
            ${flower.discount == 0 ? `` : `<span class="discount">-${flower.discount} %</span>`}
            <div class="image">
                <img src=${flower.image} alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>${flower.name}</h3>
                <div>${flower.discount == 0 ? `<div class="price">€${flower.price}</div>` : `<div class="price"> €${calcPercentage(flower.discount, flower.price)} <span>€${flower.price}</span> </div>`}</div>
            </div>
        </div>`;
        
    return item;
}