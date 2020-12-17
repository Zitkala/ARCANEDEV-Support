<?php

declare(strict_types=1);

namespace Zitkala\Support\Tests\Database;

use Zitkala\Support\Tests\TestCase;

/**
 * Class     ModelTest
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class ModelTest extends TestCase
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /** @var  \Zitkala\Support\Database\PrefixedModel */
    protected $model;

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    public function setUp(): void
    {
        parent::setUp();

        $this->model = new \Zitkala\Support\Tests\Stubs\Models\Product;
    }

    public function tearDown(): void
    {
        unset($this->model);

        parent::tearDown();
    }

    /* -----------------------------------------------------------------
     |  Test Methods
     | -----------------------------------------------------------------
     */

    /** @test */
    public function it_can_be_instantiated(): void
    {
        $expectations = [
            \Illuminate\Database\Eloquent\Model::class,
            \Zitkala\Support\Database\PrefixedModel::class,
        ];

        foreach ($expectations as $expected) {
            static::assertInstanceOf($expected, $this->model);
        }
    }

    /** @test */
    public function it_can_get_table_name_without_prefix(): void
    {
        static::assertSame('products', $this->model->getTable());
    }

    /** @test */
    public function it_can_set_and_get_prefix(): void
    {
        $this->model->setPrefix($prefix = 'shop_');

        static::assertSame($prefix, $this->model->getPrefix());
        static::assertSame($prefix . 'products', $this->model->getTable());
    }
}
