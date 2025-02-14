@extends('include.master')
@section('content')

<!-- Updated HTML -->
<div class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <!-- Product Images -->
            <div class="w-full md:w-1/2 px-4 mb-8">

                <!-- Display the attached PDF -->
                <div class="mt-4">
                    <h3 class="text-lg font-semibold mb-2">Attached PDF:</h3>
                    @if($pdfAttachment)
                    <div class="relative">
                        <!-- PDF.js Viewer -->
                        <div id="pdfContainer" class="w-full h-[600px] rounded-lg shadow-md"></div>

                        <!-- Controls -->
                        <div class="flex justify-between items-center mt-4">
                            <div>
                                <button id="prev" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded mr-2">Previous</button>
                                <button id="next" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Next</button>
                                <span class="ml-4">Page: <span id="page_num"></span> / <span id="page_count"></span></span>
                            </div>
                            <a href="{{ asset($pdfAttachment->file_path) }}"
                                download="{{ basename($pdfAttachment->file_path) }}"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Download PDF
                            </a>
                        </div>
                    </div>
                    @else
                    <p class="text-gray-500">No PDF attached.</p>
                    @endif
                </div>
            </div>

            <!-- Product Details -->
            <div class="w-full md:w-1/2 px-4">
                <h2 class="text-3xl font-bold mb-2">{{ $post->title }}</h2>
                <p class="text-gray-600 mb-4">Author: hari pd k pdf pdf</p>
                <p class="text-gray-600 mb-4">Type: {{ ucfirst($post->type) }}</p>
                <p class="text-gray-600 mb-4">Semester: {{ $post->semester }}</p>
                <p class="text-gray-600 mb-4">Uploaded date: {{ $post->created_at }}</p>
                <p class="text-gray-700 mb-6">{{ $post->short_desc }}</p>
            </div>
        </div>
    </div>
</div>

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

        const container = document.getElementById('pdfContainer');
        if (!container) return;

        const canvas = document.createElement('canvas');
        canvas.className = 'w-full h-full';
        container.appendChild(canvas);
        const ctx = canvas.getContext('2d');

        let pdfDoc = null,
            pageNum = 1,
            pageRendering = false,
            pageNumPending = null;

        function renderPage(num) {
            pageRendering = true;
            pdfDoc.getPage(num).then(function(page) {
                const viewport = page.getViewport({
                    scale: 1.5
                });
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                const renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };

                page.render(renderContext).promise.then(function() {
                    pageRendering = false;
                    if (pageNumPending !== null) {
                        renderPage(pageNumPending);
                        pageNumPending = null;
                    }
                });
            });

            document.getElementById('page_num').textContent = num;
        }

        pdfjsLib.getDocument('{{ asset($pdfAttachment->file_path) }}').promise.then(function(pdfDoc_) {
            pdfDoc = pdfDoc_;
            document.getElementById('page_count').textContent = pdfDoc.numPages;
            renderPage(pageNum);
        });

        document.getElementById('prev').addEventListener('click', function() {
            if (pageNum <= 1) return;
            pageNum--;
            renderPage(pageNum);
        });

        document.getElementById('next').addEventListener('click', function() {
            if (pageNum >= pdfDoc.numPages) return;
            pageNum++;
            renderPage(pageNum);
        });
    });
</script>