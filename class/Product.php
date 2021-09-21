<?php

 class Product {

    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /** @var int */
    protected $price;

    /** @var string */
    protected $category;

    /** @var array */
    protected $colors;

    /** @var string */
    protected $productDescription;

    /** @var string */
    protected $image;

    /** @var string */
    protected $imageDescription;

    // Product id's getter and setter
    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     */
    public function setProductId(int $id): void
    {
        $this->id = $id;
    }

    // Name's getter and setter
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // Price's getter and setter
    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }
    /**
     * @param string $price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    // Category's getter and setter
    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    // Colors's getter and setter
    /**
     * @return array
     */
    public function getColors(): array
    {
        return $this->colors;
    }
    /**
     * @param array $colors
     */
    public function setColors($colors): void
    {
        $productColors = array();
        
        // print_r($colors);
        // echo "</br> SETTER </br></br>";

        foreach($colors as $color) {
            for($i = 0; $i <= count($colors); $i++) {
                $productColors[$i] = $color;
            }
        }

        $this->colors = $productColors;
    }

    // Product Description's getter and setter
    /**
     * @return string
     */
    public function getProductDescription(): string
    {
        return $this->productDescription;
    }
    /**
     * @param string $productDescription
     */
    public function setProductDescription(string $productDescription): void
    {
        $this->productDescription = $productDescription;
    }

     // Image's getter and setter
    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }
    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

     // Image description's getter and setter
    /**
     * @return string
     */
    public function getImageDescription(): string
    {
        return $this->imageDescirption;
    }
    /**
     * @param string $imageDescirption
     */
    public function setImageDescription(string $imageDescription): void
    {
        $this->imageDescription = $imageDescription;
    }

    public function parseDataFromArray(array $data) {
        $this->setProductId($data['id']);
        $this->setName($data['name']);
        $this->setPrice($data['price']);
        $this->setCategory($data['category']);

        // print_r($data['colors']);
        // echo "</br> PARSEDATAFROMARRAY </br>";

        $this->setColors($data['colors']);
        
        $this->setProductDescription($data['productDescription']);
        $this->setImage($data['image']);
        $this->setImageDescription($data['imageDescription']);
    }
 }
