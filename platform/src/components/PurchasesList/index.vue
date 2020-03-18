<template>
  <div v-loading="loading" class="PurchasesList">
    <div class="PurchasesList__title">
      <i class="fa fa-shopping-bag" aria-hidden="true"/>
      Ostatnio dokonane zakupy
    </div>
    <div class="PurchasesList__table">
      <el-table
            :data="list"
            style="width: 100%">
        <el-table-column
                prop="client"
                label="Klient"
                width="160">
        </el-table-column>
        <el-table-column
                prop="product"
                label="Produkt"
                width="280">
        </el-table-column>
        <el-table-column
                prop="price"
                label="Kwota"
                width="100">
          <template slot-scope="scope">
            {{ scope.row.price }} $
          </template>
        </el-table-column>
        <el-table-column
                prop="discount"
                label="Wykorzystany rabat">
          <template slot-scope="scope">
              {{ scope.row.discount }} %
          </template>
        </el-table-column>
      </el-table>
    </div>

  </div>
</template>

<script src="./component.js"></script>
<style src="./style.sass" lang="sass" scoped></style>
