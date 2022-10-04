<?php
return [
    //button back + save + apply + search + export + logout
    'button' => [
        'back' => 'Trở về',
        'save' => 'Lưu',
        'apply' => 'Áp dụng',
        'search' => 'tìm kiếm',
        'export' => 'Xuất excel',
        'logout' => 'Đăng xuất',
        'cancel' => 'Hủy bỏ',
        'done' => 'Hoàn thành',
        'change' => 'Đổi',
        'new' => 'Mới',
        'in_progress' => 'Trong tiến trình',
        'buyer_cancel' => 'Người mua hủy',
        'admin_cancel' => 'Quản trị viên hủy',

    ],

    // sidebar name
    'user' => 'Quản lý người dùng',
    'category' => 'Quản lý danh mục',
    'product' => 'quản lý sản phẩm',
    'order' => 'Quản lý đơn hàng',
    'name' => [
        'dashboard' => 'Bảng điều khiển',
        'users' => 'Danh sách người dùng',
        'category' => 'Danh sách danh mục',
        'product' => 'Danh sách sản phẩm',
        'order' => 'Danh sách đơn hàng',
    ],

    // order_by
    'sort' => [
        'asc' => 'Sắp xếp tăng dần',
        'desc' => 'Sắp xếp giảm dần',
    ],

    // search dashboard + user + category + product + order
    'search' => [
        'dashboard' => [
            'from_date' => 'Từ ngày',
            'to_date' => 'Đến ngày',
        ],
        'user' => [
            'name' => 'Tên/ Email',
            'field' => 'Tìm kiếm tên hoặc email',
            'type' => 'Chọn quyền',
        ],
        'category' => [
            'name' => 'Tên',
            'field' => 'tìm kiếm tên',
        ],
        'product' => [
            'name' => 'Tên',
            'category' => 'Danh mục',
            'sort_price' => 'Xếp theo giá',
            'sort_sold' => 'Xếp theo số lượng đã bán',
            'field' => [
                'name' => 'Tìm kiếm tên',
                'category' => 'Chọn danh mục',
                'sort' => 'Chọn sắp xếp theo',
            ],
        ],
        'order' => [
            'name' => 'Tên sản phẩm',
            'status' => 'Trạng thái',
            'from_date' => 'Từ',
            'to_date' => 'Đến',
            'field' => [
                'name' => 'Tìm kiếm tên',
                'status' => 'Chọn trạng thái'
            ],
        ],
    ],

    // table user + category + product + order
    'table' => [
        'user' => [
            'no' => 'STT',
            'name' => 'Tên ',
            'email' => 'Email',
            'type' => 'Quyền',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ],
        'category' => [
            'no' => 'Stt',
            'name' => 'Tên danh mục',
            'created_by' => 'Người tạo',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ],
        'product' => [
            'no' => 'STT',
            'image' => 'Ảnh sản phẩm',
            'name' => 'Tên sản phẩm',
            'category' => 'Danh mục',
            'price' => 'Giá tiền',
            'sold' => 'SL đã bán',
            'status' => 'Trạng thái',
            'updated_at' => 'Ngày cập nhật',
        ],
        'order' => [
            'no' => 'STT',
            'image' => 'Ảnh sản phẩm',
            'name' => 'Tên sản phẩm',
            'buyer' => 'Người mua',
            'qty' => 'Số lượng',
            'status' => 'Trạng thái',
            'buy_at' => 'Ngày mua',
            'updated_at' => 'Ngày cập nhật',
        ],
    ],

    // Action
    'action' => 'Hành động',

    // create new user + category + product
    'create' => [
        'user' => [
            'name' => 'Tạo mới người dùng',
            'form' => [
                'name' => 'Tạo người dùng',
                'user_name' => [
                    'name' => 'Tên người dùng',
                    'text' => 'Nhập tên người dùng'
                ],
                'user_image' => 'Ảnh người dùng',
                'user_email' => [
                    'name' => 'Email ',
                    'text' => 'Nhập email',
                ],
                'user_password' => [
                    'name' => 'Mật khẩu',
                    'text' => 'Nhập mật khẩu',
                ],
                'type' => 'Chọn quyền',
            ],
        ],
        'category' => [
            'name' => 'Tạo mới danh mục',
            'form' => [
                'name' => 'Tạo danh mục',
                'category_name' => [
                    'name' => 'Tên danh mục',
                    'text' => 'Nhập tên danh mục',
                ],
            ],
        ],
        'product' => [
            'name' => 'Tạo mới sản phẩm',
            'form' => [
                'name' => 'Tạo sản phẩm',
                'product_name' => 'Tên sản phẩm',
                'product_image' => 'Ản sản phẩm',
                'category' => 'Danh mục',
                'price' => 'Giá tiền',
                'description' => 'Mô tả',
                'status' => 'Trạng thái',
                'field' => [
                    'name' => 'Nhập tên sản phẩm',
                    'category' => 'Chọn danh mục',
                    'price' => 'Nhập giá sản phẩm',
                    'description' => 'Nhập mô tả sản phẩm',
                    'status' => 'Chọn trạng thái',
                ],
            ],
        ],
    ],

    // name update user + category + product
    'update' => [
        'user' => 'Cập nhật người dùng',
        'category' => 'Cập nhật danh mục',
        'product' => 'Cập nhật sản phẩm',
    ],

    // name info
    'info' => [
        'name' => 'Thông tin',
        'order' => [
            'name' => 'thông tin đơn hàng',
            'id' => 'ID đơn hàng',
            'buyer' => 'Người mua',
            'amount' => 'Tổng tiền',
            'buy_at' => 'Ngày mua',
            'updated_at' => 'Ngày cập nhật',
            'name_change' => 'Đổi trạng thái đơn hàng',
            'change' => 'Change',
        ],
        'product' => [
            'name' => 'Tên sản phẩm',
            'category' => 'Danh mục',
            'price' => 'Đơn giá',
            'qty' => 'Số lượng',
        ],
    ],

    // cms dashboard
    'dashboard' => [
        'statistic' => [
            'month' => [
                'name' => 'Thống kê theo tháng',
                'order' => [
                    'name' => 'Tổng số lượng đơn hàng trong',
                    'property' => 'đơn hàng'
                ],
                'total' => [
                    'name' => 'Tổng tiền trong',
                    'property' => 'VND'
                ],
                'user' => [
                    'name' => 'Tổng số lượng người dùng',
                    'property' => 'người dùng'
                ],
                'product' => [
                    'name' => 'Tổng số lượng sản phẩm',
                    'property' => 'sản phẩm'
                ],
                'category' => [
                    'name' => 'Tổng số lượng danh mục',
                    'property' => 'danh mục'
                ],
            ],
            'year' => [
                'name' => 'Thống kê theo năm',
                'name_order' => 'Thống kê số lượng đơn hàng',
                'name_total' => 'Thống kê tổng thu nhập'
            ],
        ],
    ],

];
