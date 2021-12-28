<template>
  <div class="mt-12">
    <div class="container mx-auto">
      <div>{{ $page.props.path }}</div>

      <el-table
        :data="tableData"
        border
        @selection-change="handleSelectionChange"
      >
        <el-table-column type="selection" width="55"> </el-table-column>
        <el-table-column label="第一行" prop="first">
          <template v-slot="{ row }">
            <el-checkbox v-model="row.first"></el-checkbox>
          </template>
        </el-table-column>
        <el-table-column label="第二行" prop="second">
          <template v-slot="{ row }">
            <el-checkbox v-model="row.second"></el-checkbox>
          </template>
        </el-table-column>
        <el-table-column label="第三行" prop="third">
          <template v-slot="{ row }">
            <el-checkbox v-model="row.third"></el-checkbox>
          </template>
        </el-table-column>
      </el-table>
    </div>
  </div>
</template>
<script>
// :indeterminate=
export default {
  data() {
    return {
      tableData: [
        {
          first: false,
          second: false,
          third: false,
        },
        {
          first: false,
          second: false,
          third: false,
        },
        {
          first: false,
          second: false,
          third: false,
        },
        {
          first: false,
          second: false,
          third: false,
        },
        {
          first: false,
          second: false,
          third: false,
        },
        {
          first: false,
          second: false,
          third: false,
        },
      ],
    }
  },
  watch: {
    tableData: {
      deep: true,
      handler: function (newData, oldData) {
        // 拿第一列做对比
        // const first
      },
    },
  },
  methods: {
    handleSelectionChange(row) {
      console.log(row)
      row.forEach((item) => {
        Object.keys(item).forEach((i) => {
          item[i] = true
        })
      })
    },
  },
}
</script>
