//
//  Player.m
//  iTube
//
//  Created by Etay Luz on 5/21/14.
//  Copyright (c) 2014 com.luzsoft.itube. All rights reserved.
//

#import "Player.h"

@interface Player ()

@end

@implementation Player


- (void)viewDidLoad
{
    [super viewDidLoad];
    
    /* WEB VIEW */
    self.webView = [[UIWebView alloc] initWithFrame:CGRectMake(0, 0,self.view.frame.size.height,320)];
    //theWebView.frame = CGRectMake(0, 0, 800, 1000);
    //[self.webView loadRequest:[NSURLRequest requestWithURL:[NSURL URLWithString:@"http://etayluz.com/itube/index.php"]]];
    [self.webView loadRequest:[NSURLRequest requestWithURL:[NSURL URLWithString:@"http://localhost/itube/"]]];
    //[self.webView loadRequest:[NSURLRequest requestWithURL:[[NSBundle mainBundle] URLForResource: @"index" withExtension:@"html"]]];
    self.webView.delegate = self;
    self.webView.scrollView.scrollEnabled = NO;
    self.webView.scrollView.bounces = NO;
    [self.view addSubview:self.webView];
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

@end
