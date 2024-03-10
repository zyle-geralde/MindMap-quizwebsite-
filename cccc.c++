#include <iostream>
#include <cmath>
#include <algorithm>

using namespace std;

void insertionSortAscending(int arr[], int n) {
    // Implementation of the insertion sort algorithm in ascending order
    for (int i = 1; i < n; ++i) {
        int key = arr[i];
        int j = i - 1;

        while (j >= 0 && arr[j] < key) {
            arr[j + 1] = arr[j];
            --j;
        }

        arr[j + 1] = key;
    }
}

void bucketSortAscending(int arr[], int n) {
    // Find the maximum and minimum values in the array
    int maxVal = *max_element(arr, arr + n);
    int minVal = *min_element(arr, arr + n);
    
    //Find the number of Buckets
    int numberOfBuckets = ceil(sqrt(maxVal - minVal+1));//

    // Calculate the range of elements
    // Adjusted range to ensure all elements are covered
    int range = ceil((maxVal - minVal) / numberOfBuckets + 1); 

    // Create an array of buckets (2D array for simplicity)
    int bucket_container[numberOfBuckets][n];
    int bucketCounts[numberOfBuckets] = {0};

    // Distribute elements into buckets
    for (int i = 0; i < n; i++) {
        //Finding which bucket an element belongs to.
        int bucketIndex = ceil((arr[i] - minVal) / range);
        bucket_container[bucketIndex][bucketCounts[bucketIndex]] = arr[i];
        bucketCounts[bucketIndex] += 1;
    }

    // Sort each bucket using insertion sort in ascending order
    int index = 0;
    for (int i = 0; i <numberOfBuckets; i++) {
        insertionSortAscending(bucket_container[i], bucketCounts[i]);

        // Copy the sorted bucket back to the original array
        for (int j = 0; j < bucketCounts[i]; j++) {
            arr[index] = bucket_container[i][j];
            index++;
        }
    }
}

int main() {
    // Example input array
    int arr[] = {-11,-9,-2,0,-45,-11,1,8,8-9,-1000,45,45,78};
    int n = sizeof(arr) / sizeof(arr[0]);
    
    // Display the Unsorted array in ascending order
    cout << "Unsorted Array (Ascending Order): ";
    for (int i = 0; i < n; ++i) {
        std::cout << arr[i] << " ";
    }
    cout<<endl;


    // Perform bucket sort in ascending order
    bucketSortAscending(arr, n);

    // Display the sorted array in ascending order
    cout << "Sorted Array (Ascending Order): ";
    for (int i = 0; i < n; ++i) {
        cout << arr[i] << " ";
    }

    return 0;
}
