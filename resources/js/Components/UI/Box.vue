<template>
  <div class="p-4 border border-gray-200 rounded-md shadow-sm dark:border-gray-200 dark:text-gray-200 dark:bg-gray-700">
    <div class="font-medium text-gray-500">
      <slot name="header" />
    </div>
    <slot />
  </div>
</template>