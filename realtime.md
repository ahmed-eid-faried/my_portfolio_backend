<!-- inatall by powershell ise -->
php -v
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
dir
php composer-setup.php --install-dir=/usr/local/bin --filename=composer
composer --version
<!--  -->
<!-- inatall tests for php -->
<!-- Install PHPUnit: -->
composer require --dev phpunit/phpunit
<?php
use PHPUnit\Framework\TestCase;
class MyCodeTest extends TestCase {
    public function testImageUpload() {
        // Test imageUpload function
        // Write test cases to cover various scenarios
    }
    public function testUpdateData() {
        // Test updateData function
        // Write test cases to cover various scenarios
    }
    // Add more test methods for other functions as needed
}
<!-- ex
public function testImageUpload() {
    // Test when an image is successfully uploaded
    $result = imageUpload('path/to/upload', 'valid_image');
    $this->assertNotEquals('empty', $result);

    // Test when an invalid image is uploaded
    $result = imageUpload('path/to/upload', 'invalid_image');
    $this->assertEquals('fail', $result);
} -->

<!-- ex
public function testUpdateData() {
    // Test when data is successfully updated
    $data = /* create a test data array */;
    $result = updateData('table_name', $data, 'condition');
    $this->assertEquals(1, $result);

    // Test when data update fails
    $data = /* create a test data array */;
    $result = updateData('table_name', $data, 'invalid_condition');
    $this->assertEquals(0, $result);
} -->

vendor/bin/phpunit path/to/MyCodeTest.php
